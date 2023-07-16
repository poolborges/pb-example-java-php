package io.github.poolborges.sample.data;

import io.quarkus.hibernate.orm.panache.PanacheRepository;
import jakarta.enterprise.context.ApplicationScoped;
import java.util.List;

/**
 *
 * @author poolb
 */
@ApplicationScoped
public class OrganizationRepository implements PanacheRepository<Organization>{
    
    public List<Organization> findByCountry(String country){
        return list("SELECT org FROM Organization org WHERE org.country = ?1 ORDER BY org.name", country);
    }
}
